# chia.keva.app


You can add all avaiable nodes once a time. (JusticeHunter@reddit)

curl https://chia.keva.app/ | grep -Eo '[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}' | while read line; do timeout 5s chia show -a $line:8444 ;done

You can run a node and share the nodes.

30 * * * * bash /var/www/html/run.sh 1 > /var/www/html/node.log

Install apache and php

apt install apache2 php php-mbstring
