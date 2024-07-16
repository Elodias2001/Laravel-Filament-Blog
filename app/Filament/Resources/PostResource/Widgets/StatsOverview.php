<?php

namespace App\Filament\Resources\PostResource\Widgets;

use App\Models\Post;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Tous les articles',Post::all()->count())
            ->description('Allez checker !😁')
            // ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->color('info'),

            Stat::make('Articles Publiés',Post::whereIsPublished(true)->count())
            ->description('Allez checker !😁')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->color('success'),

            Stat::make('Articles Non Publiés',Post::whereIsPublished(false)->count())
            ->description('Allez checker !😁')
            ->descriptionIcon('heroicon-m-arrow-trending-down')
            ->color('primary'),
        ];
    }
}
