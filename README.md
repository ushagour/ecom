# laravel 8 (ecom site) Tips 

### random select 
```
 Product::inRandomOrder()->limit(4)->get();
 ```
###




### Tips  
> **_dyanamic content tip :_**  make on sale dynamic  save one record on database and update it whenever you want
### Tips  
> **_dyanamic content tip :_**  create a home component to manage all dynamic content of the home page


```
when you have a timer as a widget  and you have to give him a date you have to respect the date-time format use carbon 
{{Carbon\carbon::parse($onSale->sale_date)->format("Y/m/d h:m:s")}}

```

| regular price    |      sale price       | 
|----------        |:-------------:|
|   product price  | sale price after sold out |


  

