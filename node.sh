#wget http://nodejs.org/dist/node-v5.7.0-linux-x86.tar.gz

echo "Start" > /home4/uwubotor/public_html/nodelog

tar -xzf node-v9.1.0-linux-x64.tar.gz >> /home4/uwubotor/public_html/nodelog
mv node-v9.1.0-linux-x64/ /home4/uwubotor/public_html/node/ >> /home4/uwubotor/public_html/nodelog
rm -f node-v9.1.0-linux-x64.tar.gz >> /home4/uwubotor/public_html/nodelog

echo "Fin" > /home4/uwubotor/public_html/nodelog