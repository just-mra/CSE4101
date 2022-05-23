from django.shortcuts import redirect, render
from account.models import Account
from account.forms import AccountForm
# Create your views here.

def home(request):

    data = Account.objects.all()
    return render(request, 'home.html', {'data': data})

def register(request):

    form = AccountForm(request.POST or None)

    if request.method == 'POST':
        if form.is_valid():
            instance = form.save(commit=False)
            instance.save()
            return render(request, 'home.html')
    
    return render(request, 'register.html', {'form':form})