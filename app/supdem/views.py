
from django.contrib.auth.decorators import login_required
from django.shortcuts import render, redirect
from django.contrib import messages
from .forms import UserRegisterForm
from django.conf import settings
User = settings.AUTH_USER_MODEL



def register(request):
    if request.method == 'POST':
        form = UserRegisterForm(request.POST)
        if form.is_valid():
            form.save()
            username = form.cleaned_data.get('FirstName')
            messages.success(request, f'Account created for {FirstName}!')
            return redirect('supdem/sign-up.html')
    else:
        form = UserRegisterForm()
    return render(request, 'supdem/register.html', {'form': form})
