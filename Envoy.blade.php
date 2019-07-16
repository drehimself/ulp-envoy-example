@servers(['web-1' => 'forge@andredemos.ca'])

@task('git')
    cd /home/forge/envoy.andredemos.ca
    git pull origin master
@endtask

@task('composer')
    cd /home/forge/envoy.andredemos.ca
    composer install --no-interaction --prefer-dist --optimize-autoloader
@endtask

@task('migrate')
    cd /home/forge/envoy.andredemos.ca
    if [ -f artisan ]
    then
        php artisan migrate --force
    fi
@endtask

@story('deploy')
    git
    composer
    migrate
@endstory


{{-- @servers(['web-1' => 'forge@andredemos.ca', 'web-2' => 'forge@laravelecommerceexample.ca'])

@task('list', ['on' => 'web-1', 'confirm' => true])
    cd envoy.andredemos.ca
    ls -la
@endtask

@task('inspire')
    cd envoy.andredemos.ca
    php artisan inspire
@endtask

@story('awesome')
    list
    inspire
@endstory --}}
