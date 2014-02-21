# domain: doral-auto-mall.com
# public: /var/www/doralautomall/

<VirtualHost *:80>
	ServerAdmin jreyes@seyer.com.ve
	ServerName www.doral-auto-mall.com
	ServerAlias doral-auto-mall.com
	
	DocumentRoot /var/www/doralautomall
	<Directory />
		Options FollowSymLinks
		AllowOverride All
	</Directory>
	
	<Directory /var/www/doralautomall>
		Options Indexes FollowSymLinks MultiViews
		AllowOverride All
		Order allow,deny
		allow from all
	</Directory>

	ScriptAlias /cgi-bin/ /usr/lib/cgi-bin/
	<Directory "/usr/lib/cgi-bin">
		AllowOverride None
		Options +ExecCGI -MultiViews +SymLinksIfOwnerMatch
		Order allow,deny
		Allow from all
	</Directory>

	ErrorLog /var/log/apache2/error.log
	# Possible values include: debug, info, notice, warn, error, 
	# crit, alert, emerg.
	LogLevel error
	CustomLog /var/log/apache2/access.log combined
    Alias /doc/ "/usr/share/doc/"
    <Directory "/usr/share/doc/">
        Options Indexes MultiViews FollowSymLinks
        AllowOverride None
        Order deny,allow
        Deny from all
        Allow from 127.0.0.0/255.0.0.0 ::1/128
    </Directory>
</VirtualHost>
