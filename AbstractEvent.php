<?php
abstract class AbstractEvent
{
    // Abstract method declaration
    abstract public function createEvent($name, $date, $location);
}

// Event.php
class Event extends AbstractEvent
{
    // Method implementation
    public function createEvent($name, $date, $location)
    {
        return new Event($name, $date, $location);
    }
}

// index.php
require_once 'AbstractEvent.php';
require_once 'Event.php';

// Instantiate a subclass instance
$event = new Event();

// Call the method and retrieve the object it builds
$newEvent = $event->createEvent('Sample Event', '2023-12-31', 'Virtual');

?>