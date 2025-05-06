<?php

namespace App\Nova;

use App\Models\Contract;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;

class ContractResource extends Resource
{
    public static $model = Contract::class;

    public static $title = 'name';

    public static $search = [
        'id', 'name',
    ];

    public function fields(Request $request): array
    {
        return [
            ID::make()->sortable(),

            Text::make('Name')
                ->sortable()
                ->rules('required'),

            BelongsToMany::make('Items', 'items', ItemResource::class)
                ->fields(new ContractItemFields())
                ->allowDuplicateRelations()
                ->withSubtitles()
                ->searchable()
                ->referToPivotAs('Scope'),
        ];
    }

    public function cards(Request $request): array
    {
        return [];
    }

    public function filters(Request $request): array
    {
        return [];
    }

    public function lenses(Request $request): array
    {
        return [];
    }

    public function actions(Request $request): array
    {
        return [];
    }
}
