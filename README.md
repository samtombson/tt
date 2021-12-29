# RUN #

#### Make blog.example.com accessable ####

```echo '127.0.0.1 blog.example.com' | sudo tee -a /etc/hosts```

#### Run docker containers ####

```docker-compose up -d```

**After complete please wait about minute till all services started**

# Checks #

#### Check main page ####

http://blog.example.com/

#### Check admin panel ####

http://blog.example.com/wp-login.php

wordpress / wordpress

#### Check grafana ####

http://blog.example.com:3000/d/UkGlJM0nk/metrics?orgId=2

wordpress / wordpress
