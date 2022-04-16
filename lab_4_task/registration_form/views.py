from django.http import HttpResponseRedirect
from django.shortcuts import render
from django.urls import reverse
from registration_form.forms import StudentModelForm
from registration_form.models import Student

# Create your views here.

def register(request):

  new_student = StudentModelForm()

  if request.method == 'POST':
    new_student = StudentModelForm(request.POST)
    
    if new_student.is_valid():
      new_student.save(commit=True)
    
    return HttpResponseRedirect(reverse('home'))


  dict = {
    'new_student': new_student,
  }

  return render(request, 'registration_form/register.html', context=dict)

def home(request):

  all_student = Student.objects.all()

  dict = {
    'all_student': all_student,
  }

  return render(request, 'registration_form/home.html', context=dict)


def deleteStudent(request, pk):
  print(pk)

  student = Student.objects.get(id=pk)

  if request.method == 'POST':
    student.delete()
    return HttpResponseRedirect(reverse('home'))
  
  dict = {
    'student': student,
  }


  return render(request, 'registration_form/deleteStudent.html', context=dict)

def updateStudent(request, pk):

  stud_id = Student.objects.get(id=pk)
  if request.method == 'POST':
    new_student = StudentModelForm(request.POST, instance=stud_id)

    if new_student.is_valid():
      new_student.save()
  else:
    new_student = StudentModelForm(instance=stud_id)
  
  return render(request, 'registration_form/updateStudent.html', {'new_student': new_student})