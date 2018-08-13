<?php

namespace Bo\CalendarBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class BoCalendarBundle extends Bundle
{
   public function getParent()
    {
        return 'BladeTesterCalendarBundle';
    }
}
