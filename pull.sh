git pull

if [ "$?" != "0" ];

    then
    # true branch
    echo "Shell Failed!" && terminal-notifier -message " :( Pull Shell Failed! Please check terminal." -title "Git Push Update"
else
    # false branch
    echo "Shell Success!" && terminal-notifier -message "Pull Shell Success!" -title "Git Push Update"
    exit 1
fi
