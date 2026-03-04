Zadanie 3.3.4
Czy dostrzegasz jakieś zależności?
- mimo że app2 wysyła mniej zapytań (jedno na 2 sekundy) to jej maksymalny czas oczekiwania wynosił około 800 ms (średnio). Dzieje się tak dlatego że app2 i app1 działają na tym samym lokalnym serwerze. Procesor jest obciążony przez app1 dlatego app2 ma wysoki czas oczekiwania.
- średni czas odpowiedzi jest podobny dla app1 i app2 
- błędy pojawiły się tylko przy app1 (0,02%). Najprwadopodonbiej są związane z próbą przekroczenia jednoczesnych limitów połączenia 

Czy przy wielokrotnym uruchomieniu testu wyniki są podobne?
- tak, są zbliżone

Zmień czas trwania testu i odczytaj wyniki.
- liczba próbek zmniejszyła się proporcjonalnie do zmniejszenia czasu trwania
- przepustowość została na bardzo podobnym poziomie

Zmień liczbę wątków w obu grupach wątków i sprawdź, jak to wpływa na wyniki.
- zmniejszenie: średni czas odpowiedzi spada, znikają błędy, obie aplikacje działają szybciej, ale przepustowość spada
- zwiększenie: średni czas odpowiedzi wzrasta, pojawia sie więcej błędów, aplikacje zwalniają

Zadanie 3.4.1
Cel: Sprawdzenie działania systemu w trzech fazach ze stopniowo rosnącym obciążeniem 
Parametry:
Faza 1 (Małe): Number of Threads: 20, Duration: 60, Ram-up period: 0.
Faza 2 (Średnie): Number of Threads: 80, Duration: 60, Ram-up period: 0.
Faza 3 (Duże): Number of Threads: 250, Duration: 60, Ram-up period: 0.
W każdej z grup zostało dodane żądanie HTTP Request do index1.php

Wyniki:
Faza 1 - serwer poradził sobie bez większych przeszkód. Wygenerowano ponad 41 tysięcy zapytań. Średni czas odpowiedzi wynosił 28ms, max czas 89ms, nie wystąpiły żadne błędy.

Faza 2 - odczuwalny spadek wydajności serwera. Wygenerowano ponad 33 tysiące zapytań. Średni czas odpowiedzi wynosił już 142ms, max czas aż 942ms, procent błędów to 0,04.

Faza 2 - serwer osiągnął bootleneck. Wygenerowano prawie 40 tysięcy zapytań. Średni czas odpowiedzi wynosił 378ms (więcej niż 2 krotne zwiększenie względem fazy 2), max czas wzrósł aż do 26879ms, procent błędów to 0,13.

Zadanie 3.4.2
Cel: Sprawdzenie zachowania systemu poddanego bardzo dużemu obciążeniu przez dłuższy czas

Parametry:
Stress test (Thread Group): Number of Threads: 1000, Duration: 300, Ram-up period: 10.

Wyniki:
W trakcie 5 minut serwer przetworzył 192 339 zapytań, co dało bardzo wysoką przepustowość na poziomie ok. 638 zapytań na sekundę. Średni czas odpowiedzi wzrósł do 1537 ms. Maksymalny czas osiągnął poziom 67 447 ms. System zaczął gubić żądania Error % = 0.16%. Serwer nie uległ awarii ale jego wydajność znacznie spadła.