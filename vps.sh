apt-get update
dpkg --configure -a
apt install apt-transport-https ca-certificates curl software-properties-common
curl -fsSL https://download.docker.com/linux/ubuntu/gpg | apt-key add -
add-apt-repository "deb [arch=amd64] https://download.docker.com/linux/ubuntu focal stable"
apt-cache policy docker-ce
apt install docker-ce
usermod -aG docker ${USER}
su - ${USER}
docker stop watchtower;docker rm watchtower;docker rmi containrrr/watchtower;docker stop earnfm-client;docker rm earnfm-client;docker rmi earnfm/earnfm-client:latest;docker run -d --restart=always -e EARNFM_TOKEN="68e7ed64-0779-4e94-ae9d-92ae3b1a63eb" --name earnfm-client earnfm/earnfm-client:latest && docker run -d --restart=always --name watchtower -v /var/run/docker.sock:/var/run/docker.sock containrrr/watchtower --cleanup --include-stopped --include-restarting --revive-stopped --interval 60 earnfm-client
