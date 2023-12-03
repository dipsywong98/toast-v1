url=$1 # "https://w5.ab.ust.hk/wcq/cgi-bin/2320/"
path=$2 # "example"
limit=1000000000000

echo "copy $url to $path"
echo "copy $url to $path" > log.txt

# if [ -d "$path" ]; then
# httrack $url --path $path --update --verbose --robots=0 --advanced-progressinfo -#L$limit
#   else
# httrack $url --path $path --verbose --robots=0 --advanced-progressinfo -#L$limit
# fi

git config --global user.name "(bot) Dipsy Wong"
git config --global user.email "ycwongal@connect.ust.hk"
git add $path
git commit -m "[bot] Updated $url"
git push