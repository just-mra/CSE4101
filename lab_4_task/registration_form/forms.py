from random import choices
from tkinter.tix import Select
from django.forms import CheckboxSelectMultiple, ModelChoiceField, ModelForm, MultipleChoiceField, NumberInput, TextInput, Textarea, CharField, ChoiceField, IntegerField
from registration_form.models import Student

class StudentModelForm(ModelForm):

  class Meta:
    
    model = Student
    fields = "__all__"
    labels = {
      'fav_icecream_flavour': 'Favorite Ice Cream Flavor',
    }
    GENDER_CHOICES = (
      ('M', 'Male'),
      ('F', 'Female'),
  )
    widgets = {
      'address': Textarea(attrs={'cols': 80, 'rows': 5,'class':'form-control'}),
      'first_name': TextInput(attrs={
        'class':'form-control',
      }),
      'last_name': TextInput(attrs={
        'class':'form-control',
      }),
      'department': TextInput(attrs={
        'class':'form-control',
      }),
      'roll': NumberInput(attrs={
        'class':'form-control',
      }),
      'mobile_number': NumberInput(attrs={
        'class':'form-control',
      }),
      'email': TextInput(attrs={
        'class':'form-control',
      }),
      'home_district': TextInput(attrs={
        'class':'form-control',
      }),
      
    }