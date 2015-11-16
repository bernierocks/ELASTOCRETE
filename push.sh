git add .
git commit -m "online update"
git push


if [ "$?" != "0" ];

    then
    # true branch
    echo "Shell Failed!" && terminal-notifier -message " :( ABSO Push Shell Failed! Please check terminal." -title "Git Push Update"
else
    # false branch
    echo "Shell Success!" && terminal-notifier -message "ABSO Push Shell Success!" -title "Git Push Update"
    exit 1
fi
