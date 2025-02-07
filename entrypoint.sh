echo "verificando instalação do vite"
if ! command -v vite &> /dev/null
then
    echo "vite nao encontrado! instalando"
    npm install vite --save-dev

    else
        echo "vite encontrado"
    fi

    echo "rodando migrate"
    php artisan migrate --force

    echo "iniciando o apache 
    apache2-foreground