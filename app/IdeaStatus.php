<?php

namespace App;

enum IdeaStatus: string
{
    case PENDING = 'pending';
    case IN_PROGRESS = 'in_progress';
    case COMPLETED = 'completed';

    public function label(): string
    {
        return match ($this) {
            IdeaStatus::PENDING => 'Pending',
            IdeaStatus::IN_PROGRESS => 'In Progress',
            IdeaStatus::COMPLETED => 'Completed',
        };
    }
}
