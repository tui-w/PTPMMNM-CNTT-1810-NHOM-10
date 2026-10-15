<?php
declare(strict_types=1);
function canComplete(array $session, int $requestedEventId, int $now, int $ttl): bool {
    // TTL phải dương
    if ($ttl <= 0) {
        return false;
    }
    // Phải có bản nháp với created_at
    if (!isset($session['draft']['data']['event_id'], $session['draft']['created_at'])) {
        return false;
    }
    $createdAt = $session['draft']['created_at'];
    $eventId   = $session['draft']['data']['event_id'];

    // Đúng event_id
    if ($eventId !== $requestedEventId) {
        return false;
    }
    // created_at không được ở tương lai (now phải >= created_at)
    if ($now < $createdAt) {
        return false;
    }
    // Tuổi bản nháp phải < TTL (chưa hết hạn)
    return ($now - $createdAt) < $ttl;
}
