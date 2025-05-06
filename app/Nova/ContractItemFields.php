<?php

namespace App\Nova;

use Illuminate\Database\Eloquent\Model;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class ContractItemFields
{
    /**
     * Get the pivot fields for the relationship.
     *
     * @return array<mixed>
     */
    public function __invoke(NovaRequest $request, Model $model): array
    {
        return [
            Text::make('Role', 'role')
                ->default('general')
                ->required()
                ->sortable()
                ->rules('required')
                ->filterable(),
        ];
    }
}
