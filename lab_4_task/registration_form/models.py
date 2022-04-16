from django.db import models

# Create your models here.

class Student(models.Model):
  first_name = models.CharField(max_length=20)
  last_name = models.CharField(max_length=20)
  department = models.CharField(max_length=40)
  roll = models.IntegerField()

  GENDER_CHOICES = (
      ('M', 'Male'),
      ('F', 'Female'),
  )

  gender = models.CharField(max_length=1, choices=GENDER_CHOICES)

  email = models.EmailField()
  mobile_number = models.IntegerField()

  ICE_CREAM_FLAVORS = (
    ('1','Chocolate'),
    ('2', 'Vanilla'),
    ('3', 'Strawberry'),
    ('4', 'Mint Chocolate Chip'),
    ('5', 'Butter Pecan'),
    ('6', 'Cookies-n-cream'),
    ('7', 'Cherry'),
    ('8', 'Rocky Road'),
  )

  fav_icecream_flavour = models.CharField(max_length=30, choices=ICE_CREAM_FLAVORS)

  address = models.TextField()
  home_district = models.CharField(max_length=30) 

  
  def __str__(self):
    return self.first_name + ' ' + self.last_name

