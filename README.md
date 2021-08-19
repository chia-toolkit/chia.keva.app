# chia.keva.app


You can add all avaiable nodes once a time. (JusticeHunter@reddit)

curl https://chia.keva.app/ | grep -Eo '[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}' | while read line; do timeout 5s chia show -a $line:8444 ;done

WIN PowerShell

curl https://chia.keva.app/ | Select-String -Pattern '\b\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}\b' -AllMatches | % { $_.Matches } | % { $_.Value } | ForEach-Object { Start-Sleep -s 5; chia show -a $_":8444" }

You can run a node and share the nodes.

crontab -e

30 * * * * bash /var/www/html/run.sh 1 > /var/www/html/node.log

service cron restart

Install apache and php

apt install apache2 php php-mbstring
