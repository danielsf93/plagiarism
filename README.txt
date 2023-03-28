para este plugin "funcionar" tive que fazer mudanças no arquivo /ojs-3.2.1-1/config.inc.php da forma que manda o manual do repositório oficial:

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
; iThenticate Plugin Settings ;
;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;

[ithenticate]

; Enable iThenticate to submit manuscripts after submit step 4
;ithenticate = On

; Credentials can be set by context : specify journal path
; The username to access the API (usually an email address)
;username[http://0.0.0.0:8888/index.php/geo] = "admin@admin.com"
; The password to access the API
;password[http://0.0.0.0:8888/index.php/geo] = "admin"

; default credentials
; The username to access the API (usually an email address)
;username = "meu-email-do-ithentticate@abcd.usp.br"

; The password to access the API
;password = "SENHA DO ITHENTICATE SEM CARACTERES ESPECIAIS?"



Depois, dentro dos arquivos do plugin, editei a linha 281 do arquivo Request.php, pois parecia dar um erro com a minha versão php 7.4.33. Também fiz modificações no arquivo composer.json e XMLparser.php

Fiz alguns testes e o plugin rodou no ojs-3.2.1-1 e o terminal não mostrou mais nenhum erro. 

O problema com o meu "funcionar" é que não tenho uma conta "premium" no ithenticate. Antes das modificações, haviam erros de data, e mensagem de erro ao tentar criar pasta no ithenticate. Isso não ocorre mais, também antes o plugin nem rodava quando chegava no passo 4 de submissão de artigo no ojs. 
