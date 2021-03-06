<?php

namespace App\Controller\Admin;

use App\Entity\Server;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ServerCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Server::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return parent::configureCrud($crud)
            ->setPageTitle(Crud::PAGE_INDEX, '<i class="fas fa-server"></i> Servers');
    }
}
