from django.db import models

# Create your models here.

class Account(models.Model):
    firstName = models.CharField(max_length=100)
    lastName = models.CharField(max_length=100)
    emial = models.EmailField(max_length=100)
    number = models.CharField(max_length=15)
    department = models.CharField(max_length=200)
    roll = models.CharField(max_length=20)
    gender = models.CharField(max_length=15)
    favIceCol = models.CharField(max_length=30)
    address = models.CharField(max_length=200)
    district = models.CharField(max_length=200)

    def __str__(self) -> str:
        return self.firstName