<?php

namespace PhpLibra\Wrapper;

use Types\LedgerInfoWithSignatures;
use Types\TransactionListWithProof;
use Types\UpdateToLatestLedgerResponse;

class TransactionDetailsTest extends \BootstrapTest
{
    public function testConstructor()
    {
        $response = $this->getUpdateToLatestLedgerResponse();
        /**
         * @var TransactionListWithProof $transactionListWithProof
         */
        $transactionListWithProof = $response->getResponseItems()->offsetGet(0)->getGetTransactionsResponse()->getTxnListWithProof();
        /**
         * @var LedgerInfoWithSignatures $ledgerInfoWithSigs
         */
        $ledgerInfoWithSigs = $response->getLedgerInfoWithSigs();

        $details = new TransactionDetails($transactionListWithProof, $ledgerInfoWithSigs);

        $this->assertEquals(79610, $details->version);
        $this->assertEquals(318581, $details->latestVersion);
        $this->assertEquals(1563911651011859, $details->timestampUsecs);
        $this->assertEquals('2019-07-23 19:54:11', $details->timestamp);
        $this->assertEquals('a5d2b151782a990d9bbb4d5d241e9ecf0c508270c2ddff8b524618ffa3a590da', $details->fromAddress);
        $this->assertEquals('a5d2b151782a990d9bbb4d5d241e9ecf0c508270c2ddff8b524618ffa3a590da', $details->toAddress);
        $this->assertEquals(1000000, $details->amount);
        $this->assertEquals('peer_to_peer', $details->type);
        $this->assertEquals(3, $details->sequenceNumber);
        $this->assertEquals(10000, $details->maxGasAmount);
        $this->assertEquals(0, $details->gasUnitPrice);
        $this->assertEquals(0, $details->gasUsed);
        $this->assertEquals(1661898073, $details->expirationTime);
        $this->assertEquals('program', $details->payload);
        $this->assertEquals('9d5fcfe83a50449fab3b63c868b9f94f17619bfacd89643bb9b54450ab3540af', $details->senderPublicKey);
        $this->assertEquals('6711ea9a7128f9ae9959f0c9531d213f6be96946bdad022ed6501027e8a722cb', $details->signedTransactionHash);
        $this->assertEquals('b22ce38f1230b1b797b703873727ad14f11d427c02c96ab12008ef89c0d4307a', $details->stateRootHash);
        $this->assertEquals('5ee9cda25aca21644eeeee4459867072b3892dc337f2a20f72ef0bf230aa861a', $details->eventRootHash);
        $this->assertEquals(2, count($details->events));
    }

    /**
     * @return UpdateToLatestLedgerResponse
     * @throws \Exception
     */
    private function getUpdateToLatestLedgerResponse()
    {
        $serializedJson = '{"responseItems":[{"getTransactionsResponse":{"txnListWithProof":{"transactions":[{"rawTxnBytes":"CiCl0rFReCqZDZu7TV0kHp7PDFCCcMLd/4tSRhj/o6WQ2hADGugBCrMBTElCUkFWTQoBAAcBSgAAAAQAAAADTgAAAAYAAAAMVAAAAAUAAAANWQAAAAQAAAAFXQAAACkAAAAEhgAAACAAAAAHpgAAAA0AAAAAAAABAAIAAQMAAgACBAIDAgQCBjxTRUxGPgxMaWJyYUFjY291bnQEbWFpbg9wYXlfZnJvbV9zZW5kZXIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABAgAEAAwADAERAQISJAgBEiCl0rFReCqZDZu7TV0kHp7PDFCCcMLd/4tSRhj/o6WQ2hIKEghAQg8AAAAAACiQTjjZmrqYBg==","senderPublicKey":"nV/P6DpQRJ+rO2PIaLn5Txdhm/rNiWQ7ubVEUKs1QK8=","senderSignature":"QbN+prdK4V6+L9ZjVEDyEP8Fo1m+lC33r8qYmgS6dPN5s8lkZy6CyWDLJYPdr//Rh3l01jstgzHZNLyMVV2HAQ=="}],"infos":[{"signedTransactionHash":"ZxHqmnEo+a6ZWfDJUx0hP2vpaUa9rQIu1lAQJ+inIss=","stateRootHash":"sizjjxIwsbeXtwOHNyetFPEdQnwCyWqxIAjvicDUMHo=","eventRootHash":"XunNolrKIWRO7u5EWYZwcrOJLcM38qIPcu8L8jCqhho="}],"eventsForVersions":{"eventsForVersion":[{"events":[{"accessPath":{"address":"pdKxUXgqmQ2bu01dJB6ezwxQgnDC3f+LUkYY/6OlkNo=","path":"ASF9psaz4Z8YJc+yZ22uzOO/PeA88mZHx43wCzcbJcyXL3NlbnRfZXZlbnRzX2NvdW50Lw=="},"sequenceNumber":3,"eventData":"QEIPAAAAAAAgAAAApdKxUXgqmQ2bu01dJB6ezwxQgnDC3f+LUkYY/6OlkNo="},{"accessPath":{"address":"pdKxUXgqmQ2bu01dJB6ezwxQgnDC3f+LUkYY/6OlkNo=","path":"ASF9psaz4Z8YJc+yZ22uzOO/PeA88mZHx43wCzcbJcyXL3JlY2VpdmVkX2V2ZW50c19jb3VudC8="},"sequenceNumber":3,"eventData":"QEIPAAAAAAAgAAAApdKxUXgqmQ2bu01dJB6ezwxQgnDC3f+LUkYY/6OlkNo="}]}]},"firstTransactionVersion":79610,"proofOfFirstTransaction":{"bitmap":524287,"nonDefaultSiblings":["RVKLh/cKdeEz+MfifPY9u1jAhi9YYjKsiS4+83M49n8=","uLb6Cf90oWILKC1W4nNMNMxtcQqqN71SFcQyhsd2CWE=","v8FO3JelCN06GDZ/FPoL7eflz2ujX0O+kE+PTkeahvM=","10bgXsSXlFbUOBvdhcWJ/qYtFaBY46Xc4DjlJWYH11A=","hgvrFMscwCIenwo3zFGc/PPYtOZ0aC7ii5QAHlSe0wM=","3N4lxzybiLxEl7BzZLYwwE6yvCOQbaMRldRmIOV06Iw=","SVNUgcRZrCvX+wccn8r1opGxCVwqD5msRj0Zyv/XjdM=","QyklAUPCqMawdMF6X4s0Xi2LwGSgoTu/2uPa5z3uhf0=","+0As2nBQDXCa7iDtEq2dHvpVWWDAdDI8oWpMJTEfZrE=","z1oy+IP2nW7Zk4AvQ8bflpQsNmXL64TyiOfg9xLdpUA=","tfUl4kMh4PyOSOyDJlqbd9jpXDD2U/OEjugyVln7TjQ=","oQ1itAnm7S40GVKTSf7x8HfIltJ24KnMvHqX+hkR48g=","dZIA/5ELwqsTRPoVjqTcuHBwP4Gy1IITDV96Sc8OFgo=","MrX1ZAUMstkJEPurovVr4z+CEbWfCYIhYoXBRj1M8H0=","HEbNmqfnN/66nD6Ir6z51iTLjNfcnKiYKG+62VRcRZU=","eIOIRsTsm6ydmcUTL3R2zMCk0K5i8fehLboL96wvfDQ=","dU4jio7mdTlhHF8yaOUJKGafx013uoOyvOI495alj8g=","ILaOaqcGtnTFQAIbAWMQdl3r9EIMjO+9o9Tx8FUXc0M=","FXszjtAMs/J7+U2s5bIhC9AgJR/8sulu3tIWExauI5c="]}}}}],"ledgerInfoWithSigs":{"signatures":[{"validatorId":"O3x1bM6a19gBsHigjukd9fgSLkQBG0/fbWwgwBaCO48=","signature":"iZetJ3XJhnni8mgGdNmkX+OJceU2BPRu/AMym7iUbiBm4ALdTQDe3OYLh+Yd1cE8HwN7FKD66RrYdiczTJsEBQ=="},{"validatorId":"Joc97NkzAGWYiwrPUCdmK1CX+1CROuKiZStQqYad9Ps=","signature":"2Hh/KCL0l9IIO1RGU11u31l0876AfEvqEuAGAVyHchCNHX2u3rQt0Olxx1SHe65J0ppeITA1fs2KVUlq82HfAw=="},{"validatorId":"GfkzFMvowJJaRJLrLy8ZfObhFxdEnCGPUOBD43+npfM=","signature":"DOuWgG7EmcEXpdVgDY1zSddAcu344Qpcr2RYdgIB7WgwZF2kZozsolJOcWs8FP1qnyZDAWKsE8dcxsq9BFiqCQ=="},{"validatorId":"kQK9exrX6PMQI8UANxzH0pcXWLRQz6icAD77OrGSpLg=","signature":"TQClm/0yGFbhoTeUrODQchxgc3oQxOxuWDgMKcSg2XeotNRLiDQRzRFIAaA8Kf7f/dgp2aEOCMvdD8MnYhcDDw=="},{"validatorId":"TXirkLdZ7Kyv5OaHxducwpNqeinISqi+d39U21GddWs=","signature":"mquOv9T5fnXwK6vxNdNYU22rMutr58uJasc1nlzOdkTFPR03xbaC53B8bkyurDYaaZBxXhlMkrb9/tHkaV+iBg=="},{"validatorId":"SZVVnEhEt+QQHEhgNTKUAqi6SXbBviMIC6xb3famDw0=","signature":"pyFC9oMRCSYIh18t5lmsV5xjTwiV5rFNCE/pdRjh5kUUdgNaOjev4hPLKCNE17hZQaphSb+7dQlVT2KqUa8cAg=="},{"validatorId":"ZofppubD3g3E9+kerLxnaiKKnAxGRQu8y9EHJ4C/yzA=","signature":"K+a2HrsXAvVOi+GTBg1KYmrTZ2HY2v9IMi0+GEaAinXe52dgLLCcKoarHFSUUVMUwmr1phFaSxtypxSuf0TKBw=="}],"ledgerInfo":{"version":318581,"transactionAccumulatorHash":"aH6s2O6eeIvwDbLIzvXw3eKHVLJ4HnzVVjDsnZW89gY=","consensusDataHash":"qnCD4amjaAesy9TarG8Gb8v9QPbHP4AJjgMUUI5Ogr8=","consensusBlockId":"Lyj336+Ov3oGXEuoI+2VzrYmu7KKIvmQTEdg8IaHaj0=","timestampUsecs":1563911651011859}}}';
        $response = new UpdateToLatestLedgerResponse();
        $response->mergeFromJsonString($serializedJson);
        return $response;
    }
}
