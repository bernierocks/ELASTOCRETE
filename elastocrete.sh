git add .
git commit -m "online update"
git push



if [ "$?" != "0" ];

    then
    # true branch
    echo "Shell Failed!" 
else
    # false branch
    echo "Shell Success!" 
    exit 1
fi
