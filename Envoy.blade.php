@servers(['web-1' => 'forge@andredemos.ca', 'web-2' => 'forge@laravelecommerceexample.ca'])

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
@endstory
