#!/usr/bin/env python

import os
import sys

os.chdir("/home/verese/domains/beta.verese.net/verese")
execfile('env/bin/activate_this.py', dict(__file__='env/bin/activate_this.py'))

sys.path.insert(0, 'verese')
sys.path.insert(0, '.')

os.environ['DJANGO_SETTINGS_MODULE'] = "verese.settings"

from django.core.servers.fastcgi import runfastcgi
runfastcgi(method="threaded", daemonize="false")
