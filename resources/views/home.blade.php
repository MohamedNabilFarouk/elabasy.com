@extends('layouts.app')
<style>
			.color{
				color:#23282c;
			}
			.counter {
				background-color:#50dd7a;
				padding: 20px 0;
				border-radius: 5px;
				width: 100%;
			margin: 50px 0 0 0;
			}

			.count-title {
				font-size: 40px;
				font-weight: normal;
				margin-top: 10px;
				margin-bottom: 0;
				text-align: center;
			}

			.count-text {
				font-size: 13px;
				font-weight: normal;
				margin-top: 10px;
				margin-bottom: 0;
				text-align: center;
			}

			.fa-2x {
				margin: 0 auto;
				float: none;
				display: table;
				color: #4ad1e5;
			}
</style>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
@section('content')
  <div class="container-fluid">
        <div class="animated fadeIn">
             <div class="row">
            


             <div class="col-md-3">
	        <div class="counter">
      <!-- <i class="fa fa-code fa-2x"></i> -->
      <a href="{{ route('products.index') }}"> <h2 class="timer count-title count-number color" data-to="{{count($products)}}" data-speed="1500"></h2>
       <p class="count-text color">Products</p></a>
    </div>
	        </div>


            <div class="col-md-3">
	        <div class="counter">
      <!-- <i class="fa fa-code fa-2x"></i> -->
      <a href="{{ route('categories.index') }}"> <h2 class="timer count-title count-number color" data-to="{{count($categories)}}" data-speed="1500"></h2>
       <p class="count-text color">Categories</p></a>
    </div>
	        </div>

           <div class="col-md-3">
	        <div class="counter">
      <!-- <i class="fa fa-code fa-2x"></i> -->
      <a href="{{ route('accounts.index') }}"> <h2 class="timer count-title count-number color" data-to="{{count($order)}}" data-speed="1500"></h2>
      <p class="count-text color">Orders</p></a>
    </div>
	        </div> 

            <div class="col-md-3">
	        <div class="counter">
      <!-- <i class="fa fa-code fa-2x"></i> -->
      <a href="{{ route('contactuses.index') }}"> <h2 class="timer count-title count-number color" data-to="{{count($message)}}" data-speed="1500"></h2>
       <p class="count-text color ">Messsage</p></a>
    </div>
	        </div>



            </div>
        </div>
    </div>
</div>
@endsection
<script>
		(function ($) {
	$.fn.countTo = function (options) {
		options = options || {};
		
		return $(this).each(function () {
			// set options for current element
			var settings = $.extend({}, $.fn.countTo.defaults, {
				from:            $(this).data('from'),
				to:              $(this).data('to'),
				speed:           $(this).data('speed'),
				refreshInterval: $(this).data('refresh-interval'),
				decimals:        $(this).data('decimals')
			}, options);
			
			// how many times to update the value, and how much to increment the value on each update
			var loops = Math.ceil(settings.speed / settings.refreshInterval),
				increment = (settings.to - settings.from) / loops;
			
			// references & variables that will change with each update
			var self = this,
				$self = $(this),
				loopCount = 0,
				value = settings.from,
				data = $self.data('countTo') || {};
			
			$self.data('countTo', data);
			
			// if an existing interval can be found, clear it first
			if (data.interval) {
				clearInterval(data.interval);
			}
			data.interval = setInterval(updateTimer, settings.refreshInterval);
			
			// initialize the element with the starting value
			render(value);
			
			function updateTimer() {
				value += increment;
				loopCount++;
				
				render(value);
				
				if (typeof(settings.onUpdate) == 'function') {
					settings.onUpdate.call(self, value);
				}
				
				if (loopCount >= loops) {
					// remove the interval
					$self.removeData('countTo');
					clearInterval(data.interval);
					value = settings.to;
					
					if (typeof(settings.onComplete) == 'function') {
						settings.onComplete.call(self, value);
					}
				}
			}
			
			function render(value) {
				var formattedValue = settings.formatter.call(self, value, settings);
				$self.html(formattedValue);
			}
		});
	};
	
	$.fn.countTo.defaults = {
		from: 0,               // the number the element should start at
		to: 0,                 // the number the element should end at
		speed: 1000,           // how long it should take to count between the target numbers
		refreshInterval: 100,  // how often the element should be updated
		decimals: 0,           // the number of decimal places to show
		formatter: formatter,  // handler for formatting the value before rendering
		onUpdate: null,        // callback method for every time the element is updated
		onComplete: null       // callback method for when the element finishes updating
	};
	
	function formatter(value, settings) {
		return value.toFixed(settings.decimals);
	}
}(jQuery));

jQuery(function ($) {
  // custom formatting example
  $('.count-number').data('countToOptions', {
	formatter: function (value, options) {
	  return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
	}
  });
  
  // start all the timers
  $('.timer').each(count);  
  
  function count(options) {
	var $this = $(this);
	options = $.extend({}, options || {}, $this.data('countToOptions') || {});
	$this.countTo(options);
  }
});
</script>