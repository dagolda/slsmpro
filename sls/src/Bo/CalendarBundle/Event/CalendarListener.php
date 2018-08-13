<?php
namespace Bo\CalendarBundle\Event;

use BladeTester\CalendarBundle\Event\CalendarEvent;

class CalendarListener {

    public function onPrePersist(CalendarEvent $event) {
        $event_model = $event->getEvent();
        // do whatever with the object before persisting it.
    }
}