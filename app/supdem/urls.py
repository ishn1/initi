from django.urls import path
from django.views.generic import TemplateView
from .import views

urlpatterns = [
    path('admin/', TemplateView.as_view(template_name='supdem/admin.html')),
    path('', TemplateView.as_view(template_name='supdem/index.html'),name='home'),
    path('suppliers/', TemplateView.as_view(template_name='supdem/suppliers.html')),
    path('demanders/', TemplateView.as_view(template_name='supdem/demanders.html')),
    path('signup/admin', TemplateView.as_view(template_name='supdem/sign-up.html')),
    path('signup/', TemplateView.as_view(template_name='supdem/sign-up.html')),
]
