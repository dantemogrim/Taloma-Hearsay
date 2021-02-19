<?php

declare(strict_types=1);

function dateSorter(array $stories): array
{
  usort($stories, function ($date1, $date2) {
    return strtotime($date2['published']) <=> strtotime($date1['published']);
  });
  return $stories;
}
