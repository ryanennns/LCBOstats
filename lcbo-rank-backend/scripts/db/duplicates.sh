mysql
use lcbostats;
select permanent_id, COUNT(permanent_id) from price_changes group by permanent_id having count(permanent_id) > 1;
