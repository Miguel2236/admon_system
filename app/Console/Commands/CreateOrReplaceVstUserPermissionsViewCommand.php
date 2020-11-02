<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CreateOrReplaceVstUserPermissionsViewCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'view:CreateOrReplaceVstUserPermissionsView'; // delcarar el nombre del comando

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Or Replace SQL View.';    // descripción del comando

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // return 0;
        DB::statement("create or replace view UserPermissions as 
        select prf.id as profile_id, sc.id as section_id, pe.id as permission_id, m.id as module_id, prf.name as profile, pe.name as permission, pe.identify, pe.button,
        sc.id as section_id, sc.name as section, sc.short_name as section_short_name, m.name as module, m.menu_name as module_menu_name, m.icon
        from profiles_permissions as pp
        inner join profiles as prf on pp.profile_id = prf.id and prf.bActive = 1
        inner join permissions as pe on pp.permission_id = pe.id
        inner join sections as sc on pe.section_id = sc.id 
        inner join modules as m on sc.module_id = m.id");
    }
}
