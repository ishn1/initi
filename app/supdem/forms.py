
from django import forms
from django.contrib.auth  import get_user_model
from django.contrib.auth.forms import UserCreationForm

User=get_user_model()
class UserRegisterForm(UserCreationForm):
    FirstName=forms.CharField()
    LastName=forms.CharField()
    Address=forms.CharField()
    UserName=forms.CharField() 
    email = forms.EmailField()

    class Meta:
        model = User
        fields = ['FirstName','LastName', 'Address','UserName','email', 'password1', 'password2']
