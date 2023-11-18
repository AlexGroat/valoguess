<?php

namespace App\Enums;

enum AgentRoleEnum
{
    case DUELIST = 'duelist';
    case CONTROLLER = 'controller';
    case SENTINEL = 'sentinel';
    case INITIATOR = 'initiator';
}
