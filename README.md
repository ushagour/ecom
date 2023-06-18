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

```
mermaid


actor Customer as C
actor Admin as A
rectangle System {
    usecase "Browse products" as UC1
    usecase "Search products" as UC2
    usecase "Add product to cart" as UC3
    usecase "Remove product from cart" as UC4
    usecase "View cart" as UC5
    usecase "Proceed to checkout" as UC6
    usecase "Make payment" as UC7
    usecase "Track order" as UC8
    usecase "Leave feedback" as UC9
}

rectangle "Admin Panel" {
    usecase "Manage products" as UC15
    usecase "Manage orders" as UC16
    usecase "Manage inventory" as UC17
    usecase "Manage customers" as UC18
    usecase "Generate reports" as UC19
}

C --> UC1
C --> UC2
C --> UC3
C --> UC4
C --> UC5
C --> UC6
C --> UC7
C --> UC8
C --> UC9

UC3 --> UC5
UC6 --> UC7
UC8 --> UC7

A --> UC15
A --> UC16
A --> UC17
A --> UC18
A --> UC19





  

