from django.conf.urls import url
from . import views

urlpatterns = [
    # Examples:
    # url(r'^$', 'itforit.views.home', name='home'),
    # url(r'^blog/', include('blog.urls')),

     url(r'^$', views.post_list, name='post_list'),
]
