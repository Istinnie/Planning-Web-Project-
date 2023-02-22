FROM windev/webdev-base:FR270103n

COPY Planning_de_Reservation.ZIP ${WEBDEVConfiguration}comptes/ftp_webdev/

RUN set -ex \
	&& cd ${WEBDEVBinaries} \
	&& ${WEBDEVBinaries}WDInstalle /DOCKER/INSTALLEGO/Planning_de_Reservation

# Création de la persistance
VOLUME ${WEBDEVConfiguration}comptes/Donnees/Planning_de_Reservation/