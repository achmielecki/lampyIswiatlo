Jak to odpalić:
1.odpal docker-compose up -d
2.1. docker exec -t [id kontenera presty] bash 
2.2. bash /etc/apache2/sites-available/init.sh   
3.przejdź proces instalacji (localhost:80)
4.zatrzymaj kontenery
5.skopiuj zawartosc lampyiswiatlo_shop do /var/www/html kontenera my-prestashop
    docker cp ./lampyiswiatlo_shop/html/. [3cyfry id kontenera]:/var/www/html/
6.skopiuj lampyiswiatlo_db do /var/lib/mysql kontenera my-mysql
    docker cp ./lampyiswiatlo_db/mysql/. [3cyfry id kontenera]:/var/lib/mysql/
7.odpal kontenery
8.nadaj uprawnienia kontenerom (mysql i prestashop po kolei)
    docker exec [3cyfry id kontenera] chmod -R 777 .

    -przy mysql może wywalić jakieś operation not permitted ale ignorujemy to

Wyświetlenie kontenerów

    docker ps

Zapisywanie obrazu

    docker commit [3 znaki id] [nazwa obrazu]
    np docker commit 675 lampyiswiatlo-my-prestashop

    docker lasve lampyiswiatlo-my-prestashop > [nazwa pliku]

Wczytywanie obrazu  

    docker load < [nazwapliku]

Kopiowanie plików kontenera

    docker cp [options] [3 znaki id]:/var/www/html [sciezka docelowa]
    np. docker cp 675:/var/www/html ./lampyiswiatlo_shop 
    np. docker cp b15:/var/lib/mysql ./lampyiswiatlo_db                                                                                                                  

Ścieżka do volumes: \\wsl$\docker-desktop-data\version-pack-data\community\docker\volumes