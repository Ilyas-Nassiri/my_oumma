# Utiliser l'image officielle PHP avec Apache
FROM php:8.1-apache

# Copier tous les fichiers du projet dans le répertoire racine du serveur web
COPY . /var/www/html

# Définir les permissions correctes pour le répertoire
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Exposer le port 80
EXPOSE 80

# Activer les modules Apache nécessaires (par exemple, rewrite)
RUN a2enmod rewrite

# Lancer Apache en mode "foreground"
CMD ["apache2-foreground"]
