# -*- mode: ruby -*-
# vi: set ft=ruby :


Vagrant.configure(2) do |config|

  config.vm.box = "primalskill/ubuntu-trusty64"
  
  config.vm.network "private_network", ip: "172.16.0.13"

  config.vm.provider "virtualbox" do |v|
    v.name = "MVC Demo"
    v.customize ["modifyvm", :id, "--memory", "1024"]
  end

  config.vm.provision :shell, path: "bootstrap.sh"

end