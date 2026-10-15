<?php
declare(strict_types=1);

function filterEvents(array $events, string $query, string $category = '',
    bool $availableOnly = false): array
{
    $result = [];
    foreach ($events as $event) {
        // Lọc theo từ khóa (AND)
        $matchesQuery = $query === ''
            || stripos($event['title'], $query) !== false;

        // Lọc theo loại sự kiện (AND)
        $matchesCategory = $category === ''
            || strcasecmp($event['category'], $category) === 0;

        // Lọc còn chỗ: registered < capacity (AND)
        $matchesAvailable = !$availableOnly
            || (isset($event['capacity'], $event['registered'])
                && $event['registered'] < $event['capacity']);

        if ($matchesQuery && $matchesCategory && $matchesAvailable) {
            $result[] = $event;
        }
    }
    return $result;
}
