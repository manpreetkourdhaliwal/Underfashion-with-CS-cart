
{$start_date = $start_date|default:("-30 day"|strtotime)}
{$end_date = $end_date|default:("now"|strtotime)}
<div id="{$id}" class="reportrange {$extra_class} cm-date-range" {if $data_url}data-ca-target-url="{$data_url}"{/if} {if $result_ids}data-ca-target-id="{$result_ids}"{/if}>
    <a class="btn-text">
        <span>
            {$start_date|date_format:"%b %d, %Y"} — {$end_date|date_format:"%b %d, %Y"}
        </span>
        <b class="caret"></b>
    </a>
</div>

<script type="text/javascript" class="cm-ajax_force">
(function(_, $){
	$(document).ready(function() {
		_.tr({ 
			default_lang : '{$smarty.const.DEFAULT_LANGUAGE|escape:"javascript"}',
			month_name_abr_1 : '{__("month_name_abr_1")|escape:"javascript"}',
			month_name_abr_2 : '{__("month_name_abr_2")|escape:"javascript"}',
			month_name_abr_3 : '{__("month_name_abr_3")|escape:"javascript"}',
			month_name_abr_4 : '{__("month_name_abr_4")|escape:"javascript"}',
			month_name_abr_5 : '{__("month_name_abr_5")|escape:"javascript"}',
			month_name_abr_6 : '{__("month_name_abr_6")|escape:"javascript"}',
			month_name_abr_7 : '{__("month_name_abr_7")|escape:"javascript"}',
			month_name_abr_8 : '{__("month_name_abr_8")|escape:"javascript"}',
			month_name_abr_9 : '{__("month_name_abr_9")|escape:"javascript"}',
			month_name_abr_10 : '{__("month_name_abr_10")|escape:"javascript"}',
			month_name_abr_11 : '{__("month_name_abr_11")|escape:"javascript"}',
			month_name_abr_12 : '{__("month_name_abr_12")|escape:"javascript"}',
			weekday_abr_0 : '{__("weekday_abr_0")|escape:"javascript"}',
			weekday_abr_1 : '{__("weekday_abr_1")|escape:"javascript"}',
			weekday_abr_2 : '{__("weekday_abr_2")|escape:"javascript"}',
			weekday_abr_3 : '{__("weekday_abr_3")|escape:"javascript"}',
			weekday_abr_4 : '{__("weekday_abr_4")|escape:"javascript"}',
			weekday_abr_5 : '{__("weekday_abr_5")|escape:"javascript"}',
			weekday_abr_6 : '{__("weekday_abr_6")|escape:"javascript"}',
			today : '{__("today")|escape:"javascript"}',
			yesterday : '{__("yesterday")|escape:"javascript"}',
			this_month : '{__("this_month")|escape:"javascript"}',
			last_month : '{__("last_month")|escape:"javascript"}',
			this_year : '{__("this_year")|escape:"javascript"}',
			last_year : '{__("last_year")|escape:"javascript"}',
			apply : '{__("apply")|escape:"javascript"}',
			clear : '{__("clear")|escape:"javascript"}',
			from : '{__("from")|escape:"javascript"}',
			to : '{__("to")|escape:"javascript"}',
			format : '{if $settings.Appearance.calendar_date_format == "month_first"}DD/MM/YYYY{else}MM/DD/YYYY{/if}'
		});
		_.time_from = '{$time_from|escape:"javascript"}';
		_.time_to = '{$time_to|escape:"javascript"}';
	});
}(Tygh, Tygh.$));
</script>

{script src="js/tygh/date_picker.js" class="cm-ajax-force"}
