# GOTO Link Redirector
##### Made with: Docker-compose, PHP

The GOTO Link Redirector is something I wrote to immitate the GOTO/keyword service I see in corporate places.

#### Use
- The user types goto/keyword into their web browser
- This forwards them to a URL
- This is like a smart link shortener. You con add links to powerpoints and such, Corporations have been doing this for years

#### Features

- Pure PHP. No other HTTP Daemon. This uses the PHP built in server.
- Uses the Official PHP Docker Image
- Uses a simple index.php to do parsing and routing
- Easy to understand and edit

#### Installation

- Install Docker Desktop or your prefered docker version
- Get a static IP and bind it to your NIC. (you can bind more than 1 IP to a NIC)
- Input that IP in the last line of "docker-compose.yml"
- I recommend naming your instance and hostname GOTO. A simple, short name used by many.
- Edit line 8 in "docker-compose.yml" to match your intended hostname.
- Set your DNS to point to the static IP as the hostname.
- Edit the file at ./var/www/html/index.php
- Double click up.bat

## You're up and running!

#### License:  
  
- This is open source
- You can copy the code and use it any way
- You can make money off it
- You don't need to cite my page
- This can be used in any business without paying anything
- This can be used by anyone for any reson without charge
