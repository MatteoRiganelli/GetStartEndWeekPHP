# GetStartEndWeekPHP
Get a PHP object that has every start and end of each week of a specific month

## Example:
```
$month = 2; //February

$year = 2018;

$obj = $this->getDateDayWeek($month, $year);

dd($obj->start)
```

###### array:5 [
######  1 => 1
######  2 => 5
######  3 => 12
######  4 => 19
######  5 => 26
######  ]
```
dd($obj->end)
```
###### array:5 [
######  1 => 4
######  2 => 11
######  3 => 18
######  4 => 25
######  5 => 28
######  ]
