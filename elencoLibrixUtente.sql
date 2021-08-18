SELECT CODICE_LIBRO,ISBN,TITOLO
FROM UTENTI AS U,EFFETTUA AS E,LIBRO AS L,CONCESSO AS C
WHERE L.CODICE_LIBRO=C.CODICE_LIBRO_CONCESSO 
AND E.CODICE_PRESTITO_EFFETTUA=C.CODICE_PRESTITO_CONCESSO 
AND E.N_MATRICOLA_EFFETTUA=U.N_MATRICOLA
AND (U.N_MATRICOLA = '' OR U.NOME_UTENTE='' OR U.COGNOME_UTENTE='') 
ORDER BY CODICE_LIBRO ASC;
