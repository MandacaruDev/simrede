#!/bin/bash
sed -i 's/Moodle_simulado/Siem_simrede/g' Siem_simredeController.php
sed -i 's/moodle_simulado/siem_simrede/g' Siem_simredeController.php
sed -i 's/siem_cod/codsiem/g' Siem_simredeController.php
sed -i 's/aluno/nmaluno/g' Siem_simredeController.php
sed -i 's/escola/nmescola/g' Siem_simredeController.php
sed -i 's/cadastro/datacad/g' Siem_simredeController.php




