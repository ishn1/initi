# Generated by Django 2.0.7 on 2019-09-03 11:16

from django.db import migrations, models


class Migration(migrations.Migration):

    initial = True

    dependencies = [
    ]

    operations = [
        migrations.CreateModel(
            name='Post',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('fname', models.CharField(max_length=20)),
                ('flname', models.TextField()),
                ('fPassword', models.CharField(max_length=6)),
                ('vPassword', models.CharField(max_length=6)),
            ],
        ),
    ]
