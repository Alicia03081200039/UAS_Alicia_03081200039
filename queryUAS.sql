CREATE VIEW Langganan AS
SELECT ABC.Transactionnumber as Transaksi_ID, ABC.NamaSubscription as NamaSubscription
FROM form_transactions ABC
LEFT JOIN subscriptions star on star.NamaSubcription = ABC.NamaSubscription