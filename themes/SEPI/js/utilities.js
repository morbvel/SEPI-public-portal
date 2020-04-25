var utilities = ( function( window, undefined ) {
	"use strict";
	return {
		/**
		 * Asigna altura auto a todos los elementos de un contenedor
		 * @param  {jQuery Object}	$container	Contenedor de los elementos
		 * @param  {String}			classItem	clase css que identifica al elemento (sin el punto)
		 */
		resetEqualHeight: function( $container, classItem ) {
			$container.find("." + classItem).outerHeight("auto");
		},
		/**
		 * Asigna la misma altura a todos los elementos de un contenedor, pudiendo simular distributición de rows.
		 * Si esta función es usada de forma dinámica, puede que tengas que ejecutar prev. la función resetEqualHeight().
		 * @param  {jQuery Object}	$container		Contenedor de todos los elementos
		 * @param  {String}			classItem		clase css de elementos (sin el punto)
		 * @param  {Number}			itemsInRow		número de elementos por fila. Si no se define,
		 * esta vairalbe tomará el número de elementos que contenga el contendor
		 */
		equalHeight: function( $container, classItem, itemsInRow ) {
			var itemList = $container.find("." + classItem),
				itemListLength = itemList.length,
				itemListGroups = [],
				itemListRow = [],
				group = 0,
				count = 0,
				itemsRow = itemsInRow || itemList.length;
			$( itemList ).each(function( index, element ) {
				itemListRow[count]=element;
				count++;
				if(count === itemsRow || (itemListLength - 1) === index) {
					itemListGroups[group] = itemListRow;
					count = 0;
					group++;
					itemListRow = [];
				}
			});
			for(var i = 0, itemListGroupsLength = itemListGroups.length; i < itemListGroupsLength; i++) {
				var itemHeight = 0,
					itemMaxHeight = 0;
				for(var f = 0, itemListRowLength = itemListGroups[i].length; f < itemListRowLength; f++) {
					itemHeight = $(itemListGroups[i][f]).outerHeight();
					if( itemHeight > itemMaxHeight) {
						itemMaxHeight = itemHeight;
					}
				}
				for(var h = 0, itemListRowLength2 = itemListGroups[i].length; h < itemListRowLength2; h++) {
					$(itemListGroups[i][h]).outerHeight(itemMaxHeight);
				}
			}
		}
	};
})(window);